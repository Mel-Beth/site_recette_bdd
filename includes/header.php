<header>

    <nav class="main-nav">
        <ul>
            <li><a href="index.php">Accueil</a></li>
            <li><a href="recettes.php">Recettes</a></li>
            <li><a href="#">Types d'Aliments</a>
                <ul class="dropdown">
                    <?php foreach ($types_aliments as $type): ?>
                        <li><a href="recettes_aliments.php?type=<?= $type['id_type_aliment'] ?>"><?= htmlspecialchars($type['nom']) ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </li>
            <li><a href="#">Régimes Alimentaires</a>
                <ul class="dropdown">
                    <?php foreach ($regimes as $regime): ?>
                        <li><a href="recettes_regimes.php?regime=<?= $regime['id_regime'] ?>"><?= htmlspecialchars($regime['nom']) ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </li>
            <li><a href="#">Connexion</a>
                <ul class="dropdown">
                    <li><a href="login.php">Connexion</a></li>
                    <li><a href="admin/index.php">Connexion admin</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    
</header>