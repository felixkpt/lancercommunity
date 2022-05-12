                @if (isset($hide_sidebar) && $hide_sidebar)
                    </div>
                </main>
                @else 
                            </div>
                        </div>
                    </div>
                </main>
                @endif
    
                @if(!isset($hide_sidebar) || !$hide_sidebar)
                <div id="side-nav-menu" class="col-md-3 py-3">
                @include('/templates/sidebar')
                </div>
                @endif
            </div>
        </div>
    </div>
    @include('/templates/footer-contents')
</body>
</html>