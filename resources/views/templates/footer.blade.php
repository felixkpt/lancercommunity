                </main>
                @if(!isset($hide_sidebar) || !$hide_sidebar)
                <div id="side-nav-menu" class="col-md-3">
                @include('/templates/sidebar')
                </div>
                @endif
            </div>
        </div>
    </div>
    @include('/templates/footer-contents')
</body>
</html>