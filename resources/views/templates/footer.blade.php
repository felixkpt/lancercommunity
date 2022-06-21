                </div>
            </main>
            <!-- End main content -->
            @if(!isset($hide_sidebar) || !$hide_sidebar)
            <div id="side-nav-menu" class="col-md-3 py-3">
            @include('/templates/sidebar')
            </div>
            @endif
            <!-- End sidenav -->
        </div>
        <!-- End #content-sidebar-wrapper -->
    </div>
    <!-- End .container-fluid -->
    @include('/templates/footer-contents')
</body>
</html>