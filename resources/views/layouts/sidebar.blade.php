<div class="sidebar-wrapper">
    <nav class="mt-2">

        <ul class="nav sidebar-menu flex-column"
            data-lte-toggle="treeview"
            data-accordion="false">

            <!-- =========================
                 TABLEAU DE BORD
            ========================== -->
            <li class="nav-item menu-open">

                <a href="/dashboard" class="nav-link active">

                    <i class="nav-icon bi bi-speedometer2"></i>

                    <p>Tableau de bord</p>

                </a>

            </li>



            <!-- =========================
                 MEMBRES
            ========================== -->
            <li class="nav-item menu-open">

                <a href="#" class="nav-link active">

                    <i class="nav-icon bi bi-people-fill"></i>

                    <p>
                        Membres
                        <i class="nav-arrow bi bi-chevron-right"></i>
                    </p>

                </a>

                <ul class="nav nav-treeview" style="display:block;">

                    <li class="nav-item">

                        <a href="{{ route('membres.index') }}" class="nav-link">

                            <i class="nav-icon bi bi-person-lines-fill"></i>

                            <p>Liste des membres</p>

                        </a>

                    </li>



                    <li class="nav-item">

                        <a href="{{ route('membres.inactif') }}" class="nav-link">

                            <i class="nav-icon bi bi-person-dash-fill"></i>

                            <p>Membres inactifs</p>

                        </a>

                    </li>


                </ul>

            </li>



            <!-- =========================
                 NOUVEAUX VENUS
            ========================== -->

            <li class="nav-item menu-open">

                <a href="#" class="nav-link active">

                    <i class="nav-icon bi bi-person-plus-fill"></i>

                    <p>

                        Nouveaux venus

                        <i class="nav-arrow bi bi-chevron-right"></i>

                    </p>

                </a>

                <ul class="nav nav-treeview" style="display:block;">

                    <li class="nav-item">

                        <a href="/visitors" class="nav-link">

                            <i class="nav-icon bi bi-people-fill"></i>

                            <p>Liste visiteurs</p>

                        </a>

                    </li>

                    <li class="nav-item">

                        <a href="/visitors/create" class="nav-link">

                            <i class="nav-icon bi bi-person-plus"></i>

                            <p>Nouveau visiteur</p>

                        </a>

                    </li>

                    <li class="nav-item">

                        <a href="/visitors/import" class="nav-link">

                            <i class="nav-icon bi bi-file-earmark-excel-fill"></i>

                            <p>Import Excel</p>

                        </a>

                    </li>

                    <li class="nav-item">

                        <a href="/visitors/conversion" class="nav-link">

                            <i class="nav-icon bi bi-person-check-fill"></i>

                            <p>Conversion membre</p>

                        </a>

                    </li>

                </ul>

            </li>



            <!-- =========================
                 SUIVI PASTORAL
            ========================== -->

            <li class="nav-item menu-open">

                <a href="#" class="nav-link active">

                    <i class="nav-icon bi bi-chat-heart-fill"></i>

                    <p>

                        Suivi pastoral

                        <i class="nav-arrow bi bi-chevron-right"></i>

                    </p>

                </a>

                <ul class="nav nav-treeview" style="display:block;">

                    <li class="nav-item">

                        <a href="{{ route('pastoral.index') }}" class="nav-link">

                            <i class="nav-icon bi bi-chat-left-text-fill"></i>

                            <p>Conversations</p>

                        </a>

                    </li>


                </ul>

            </li>



            <!-- =========================
                 FINANCES
            ========================== -->

            <li class="nav-item menu-open">

                <a href="#" class="nav-link active">

                    <i class="nav-icon bi bi-cash-stack"></i>

                    <p>

                        Finances

                        <i class="nav-arrow bi bi-chevron-right"></i>

                    </p>

                </a>

                <ul class="nav nav-treeview" style="display:block;">

                    <li class="nav-item">

                        <a href="/finance/incomes" class="nav-link">

                            <i class="nav-icon bi bi-cash-coin"></i>

                            <p>Entrées caisse</p>

                        </a>

                    </li>

                    <li class="nav-item">

                        <a href="/finance/receipts" class="nav-link">

                            <i class="nav-icon bi bi-receipt-cutoff"></i>

                            <p>Reçus</p>

                        </a>

                    </li>

                    <li class="nav-item">

                        <a href="/finance/petty-cash" class="nav-link">

                            <i class="nav-icon bi bi-wallet2"></i>

                            <p>Petit cash</p>

                        </a>

                    </li>

                    <li class="nav-item">

                        <a href="/finance/expenses" class="nav-link">

                            <i class="nav-icon bi bi-cart-dash-fill"></i>

                            <p>Dépenses</p>

                        </a>

                    </li>

                    <li class="nav-item">

                        <a href="/finance/audit" class="nav-link">

                            <i class="nav-icon bi bi-shield-check"></i>

                            <p>Annulations & Audit</p>

                        </a>

                    </li>

                </ul>

            </li>



            <!-- =========================
                 RAPPORTS
            ========================== -->

            <li class="nav-item menu-open">

                <a href="#" class="nav-link active">

                    <i class="nav-icon bi bi-file-earmark-bar-graph-fill"></i>

                    <p>

                        Rapports

                        <i class="nav-arrow bi bi-chevron-right"></i>

                    </p>

                </a>

                <ul class="nav nav-treeview" style="display:block;">

                    <li class="nav-item">

                        <a href="/reports/members" class="nav-link">

                            <i class="nav-icon bi bi-people"></i>

                            <p>Rapport des membres</p>

                        </a>

                    </li>

                    <li class="nav-item">

                        <a href="/reports/finance" class="nav-link">

                            <i class="nav-icon bi bi-cash-stack"></i>

                            <p>Rapport financier</p>

                        </a>

                    </li>

                    <li class="nav-item">

                        <a href="/reports/attendance" class="nav-link">

                            <i class="nav-icon bi bi-calendar-check-fill"></i>

                            <p>Présences</p>

                        </a>

                    </li>

                </ul>

            </li>



            <!-- =========================
                 ADMINISTRATION
            ========================== -->

            <li class="nav-header">
                ADMINISTRATION
            </li>

            <li class="nav-item menu-open">

                <a href="#" class="nav-link active">

                    <i class="nav-icon bi bi-shield-lock-fill"></i>

                    <p>

                        Administration

                        <i class="nav-arrow bi bi-chevron-right"></i>

                    </p>

                </a>

                <ul class="nav nav-treeview" style="display:block;">

                    <li class="nav-item">

                        <a href="/users" class="nav-link">

                            <i class="nav-icon bi bi-people-fill"></i>

                            <p>Utilisateurs</p>

                        </a>

                    </li>

                    <li class="nav-item">

                        <a href="/roles" class="nav-link">

                            <i class="nav-icon bi bi-shield-check"></i>

                            <p>Rôles & Permissions</p>

                        </a>

                    </li>

                    <li class="nav-item">

                        <a href="/settings" class="nav-link">

                            <i class="nav-icon bi bi-gear-fill"></i>

                            <p>Paramètres</p>

                        </a>

                    </li>

                </ul>

            </li>

        </ul>

    </nav>
</div>
