<head>
    <link rel="icon" href="../dist/img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="../dist/css/style.css">
</head>

<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar dark-bg">
    <section class="sidebar">
        <div class="user-panel black-bg">
            <div class="pull-left image"> <img src="dist/img/logo.png" class="img-circle" alt="User Image"> </div>
            <div class="pull-left info">
                <?php if (isset($_SESSION['role']) && $_SESSION['role'] === 'admin'): ?>
                <p>Admin Panel</p>
                <a href="dashboard.php"></a>
                <!-- <i class="fa fa-circle"></i> Online -->
            </div>
            <?php endif; ?>
            <?php if (isset($_SESSION['role']) && $_SESSION['role'] === 'assistant'): ?>
            <p>Assistant Panel</p>
            <a href="dashboard.php"></a>
            <!-- <i class="fa fa-circle"></i> Online -->
        </div>
        <?php endif; ?>
        </div>
        <!-- Sidebar Menu -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header dark-bg">Menu de navigation</li>

            <li class="treeview">
                <a href="#"><i class="fa fa-dashboard"></i> <span>Tableau de bord</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="dashboard.php"><i class="fa fa-angle-right"></i> Tableau de bord Principale</a></li>
                    <li><a href="dashboard_pat.php"><i class="fa fa-angle-right"></i> Tableau de bord PAT</a></li>
                    <li><a href="dashboard_enseignant.php"><i class="fa fa-angle-right"></i> Tableau de bord
                            Enseignant</a></li>
                </ul>
            </li>
            <?php if (isset($_SESSION['role']) && $_SESSION['role'] === 'admin'): ?>
            <li class="treeview"> <a href="#"><i class="fa fa-desktop"></i> <span>Gestion des Candidats</span> <span
                        class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
                <ul class="treeview-menu">
                    <li><a href="add_user.php"><i class="fa fa-angle-right"></i>Ajouter Candidat</a></li>
                    <li><a href="view_user.php"><i class="fa fa-angle-right"></i>Liste des Candidats</a></li>
                    <li></li>
                </ul>
            </li>
            <?php endif; ?>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-bullseye"></i>
                    <span>Gestion des Votants</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="add_gateway.php"><i class="fa fa-angle-right"></i> Ajouter Votants</a></li>
                    <!-- Liste des Votants avec sous-menus pour les PAT et les Enseignants -->
                    <li class="treeview">
                        <a href="#"><i class="fa fa-angle-right"></i> Liste des Votants</a>
                        <ul class="treeview-menu">
                            <li><a href="view_gateway.php"><i class="fa fa-angle-right"></i> Liste des PAT</a></li>
                            <li><a href="liste_enseignants.php"><i class="fa fa-angle-right"></i> Liste des
                                    Enseignants</a></li>
                            <li><a href="fiche_presence.php"><i class="fa fa-angle-right"></i> Fiche de présence</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>

            <?php if (isset($_SESSION['role']) && $_SESSION['role'] === 'admin'): ?>
            <li class="treeview"> <a href="#"><i class="fa fa-pencil-square-o"></i> <span>Résultats</span> <span
                        class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
                <ul class="treeview-menu">
                    <li><a href="resultats.php"><i class="fa fa-angle-right"></i>Résultats des votes</a></li>
                    <!-- <li><a href="#"><i class="fa fa-angle-right"></i>Statistique des votants</a></li> -->
                </ul>
            </li>
            <?php endif; ?>
            <!-- <?php if (isset($_SESSION['role']) && $_SESSION['role'] === 'admin'): ?>
        <li class="treeview"> <a href="#"><i class="fa fa-users"></i> <span>Gestion des Utilisateurs</span> <span
              class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
          <ul class="treeview-menu">
            <li><a href="add_utilisateur.php"><i class="fa fa-angle-right"></i>Ajouter Utilisateurs</a></li>
            <li><a href="view_utilisateur.php"><i class="fa fa-angle-right"></i>Liste des Utilisateurs</a></li>
            <li></li>
          </ul>
        </li>
      <?php endif; ?> -->

            <!-- <li class="treeview"> <a href="#"><i class="fa fa-table"></i> <span>Communication</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a> -->
            <a href="planning.php" class="dashboard-link"><i class="fa fa-table"></i> Planning</a>
            <ul class="treeview-menu">
                <!-- <li><a href="planning.php"><i class="fa fa-angle-right"></i> Planning</a></li> -->
                <!-- <li><a href="tache.php"><i class="fa fa-angle-right"></i> Gestion de tâche</a></li> -->
                <!-- <li><a href="message.php"><i class="fa fa-angle-right"></i> Envoyer des messages</a></li> -->
            </ul>
            </li>
            <li> <a href="../Electorale/backend/logout.php"><i class="fa fa-power-off"></i> <span>Déconnexion</span>
                    <span class="pull-right-container"></span> </a>
            </li>
    </section>
</aside>