<aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <!-- User Profile-->
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark" href="{{ route('home') }}" aria-expanded="false"><i class="fa fa-handshake-o"></i><span class="hide-menu">Acceuil</span></a>
                            
                        </li>

                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark" href="{{ route('AccueilPaie') }}" data-toggle="" aria-expanded="false"><i class="fa fa-credit-card"></i><span class="hide-menu">Faire un don</span></a>
                            
                        </li>
                        
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark" href="{{ route('listePaie') }}" aria-expanded="false"><i class="fa fa-history"></i><span class="hide-menu">Mes dons</span></a>
                            
                        </li>
                        @if(Auth::user()->type_user=='admin')
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark" href="{{ route('user') }}" aria-expanded="false"><i class="fa fa-users"></i><span class="hide-menu">Utilisateur</span></a>
                            
                        </li>

                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark" href="{{ route('statistiques') }}" aria-expanded="false"><i class="fa fa-line-chart" aria-hidden="true"></i><span class="hide-menu">Statistiques</span></a>
                            
                        </li>
                        @endif
                       
                        
                        <!--<li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark" href="solde.php" aria-expanded="false"><i class="mdi mdi-table"></i><span class="hide-menu">MON SOLDE[]</span></a></li>-->
						
                        
						
                        
                            
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>