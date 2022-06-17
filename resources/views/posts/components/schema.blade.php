<?php 
use App\Settings\SiteInfo;
use Illuminate\Support\Str;

$name = SiteInfo::name();
$legalName = $name.' Ltd';
$description = SiteInfo::description();
$sameAs = [
    
    'https://www.facebook.com/#',
];
$logo = url('').('#/schema/ImageObject/Logo/1');
$email = 'support@lancercommunity.com';
$permalink = url('companies/'.$post->slug);


$context = ["@context" => "https://schema.org"];
$graph = ["@graph" => []];

// 1st Item in graph array
$Organization = [
"@type" => "Organization",
"@id" => url('')."#/schema/Organization/1",
"name" => $name,
"legalName" => $legalName,
"url" => url(''),
"description" => $description,
"logo" => ["@id" => $logo],
"email" => $email,
];

$address = [
        "@type" => "PostalAddress",
        "@id" => url('').("/#schema/PostalAddress/DK"),
        "streetAddress" => "Texas 18, 5th floor",
        "addressLocality" => "Abernathy",
        "addressCountry" => "US",
        "postalCode" => "79311 Hale County"
];

$Organization['address'] = $address;


// 2nd Item in graph array
$ImageObject = [
    "@type" => "ImageObject",
    "@id" => url('').("/#schema/ImageObject/Logo/1"),
    "url" => url("public/images/logo.png"),
    "contentUrl" => url("public/images/logo.png"),
    "width" => [ "@type" => "QuantitativeValue", "value" => 451, "unitCode" => "E37", "unitText" => "pixel" ],
    "height" => [ "@type" => "QuantitativeValue", "value" => 130, "unitCode" => "E37", "unitText" => "pixel" ],
    "caption" => $name." Logo",
    "name" =>  $name
];

// 3rd Item in graph array
$WebSite = [
    "@type" => "WebSite",
    "@id" => url('').("/#schema/WebSite/1"),
    "url" => url('/'),
    "name" => $name,
    "description" => $description,
    "publisher" => [ "@id" => url('').("/#schema/Organization/1") ],
    "copyrightHolder" => [ "@id" => url('').("/#schema/Organization/1") ],
    // "potentialAction" => [[ "@type" => "SearchAction", "target" => [ "@type" => "EntryPoint", "urlTemplate" => url("search?query=[search_term_string]") ], "query-input" => "required name=search_term_string" ]],
    "inLanguage" => "en-US"
];

// 4rd Item in graph array 
$WebPage = [
    "@type" => "WebPage",
    "@id" => $permalink,
    "url" => $permalink,
    "name" => $post->company_name,
    "description" => Str::limit(strip_tags($post->content->content), 120),
    "isPartOf" => [ "@id" => url('').("/#schema/WebSite/1") ],
    "inLanguage" => "en-US",
    "about" => [ "@id" => url('').("/#schema/Organization/".$post->company_name) ],
    "mainEntity" => [ "@id" => url('').("/#schema/Organization/".$post->company_name) ],
    "primaryImageOfPage" => [ "@id" => $post->image ],
    "hasPart" => [ "@id" => url('').("/#schema/DataSet/".$post->company_name."/1") ]
];

// 5rd Item in graph array 
$BreadcrumbList = [
    
];
// 6rd Item in graph array 
$LocalBusiness = [
    "@type" => "LocalBusiness",
    "@id" => url('').("/#schema/Organization/".$post->company_name),
    "url" => $permalink,
    "sameAs" => $post->company_url,
    "name" => $post->company_name,
    "description" => Str::limit(strip_tags($post->content->content), 120),
    "author" => $post->author[0]->name,
    "email" => "partners@".$post->company_url,
    "telephone" => "866-262-4478",
    "address" => [ "@type" => "PostalAddress", "streetAddress" => "2625 Augustine Dr., Suite 601", "addressLocality" => "Santa Clara", "addressCountry" => "US", "postalCode" => "95054" ],
    "image" => [ "@id" => url('').("/#schema/ImageObject/".$post->company_name) ],
    "aggregateRating" => [ "@type" => "AggregateRating", "bestRating" => "5", "worstRating" => "1", "ratingValue" => $post->rating, "reviewCount" => $post->reviews ],
    "review" => 
        array_map(function($review) use ($post) {
            // return ($review['id']);
            return [ "@id" => url('').("/#schema/Review/".$post->company_name."/review/".$review['id'])];;
        }, $reviews->toArray()['data'])
    
];

// 7rd Item in graph array 
$Review = [];
foreach ($reviews as $review) {

    $item =
        [
            "@type" => "Review",
            "@id" => url('').("/#schema/Review/" . $post->company_name . "/review/".$review->id),
            "itemReviewed" => ["@id" => url('').("/#schema/Organization/" . $post->company_name)],
            "author" => ["@type" => "Person", "name" => $review->author->name, "url" => url('profile/'.$review->author->slug)],
            "datePublished" => $review->created_at,
            "headline" => $review->title,
            "reviewBody" => Str::limit(strip_tags($review->content), 100),
            "reviewRating" => ["@type" => "Rating", "bestRating" => "5", "worstRating" => "1", "ratingValue" => $review->rating],
            "publisher" => ["@id" => url('').("/#schema/Organization/1")],
            "inLanguage" => "en"
        ];

        $Review = array_merge($Review, $item);
    
}

$graph["@graph"] = [$Organization, $ImageObject, $WebSite, $WebPage, $BreadcrumbList, $LocalBusiness, $Review];

// $graph["@graph"] = [$PostalAddress, $ImageObject];

$jsonLd = json_encode(array_merge($context, $graph), JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);

$echo = '<script type="application/ld+json" data-business-unit-json-ld="true">'.
$jsonLd
.'</script>';

echo $echo;
// die;
?>
