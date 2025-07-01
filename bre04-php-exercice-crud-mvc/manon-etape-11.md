1. Fichier : controllers/UserController.php
📍Emplacement : dans la classe UserController
php
Copier
Modifier
public function list(): void
{
    $manager = new UserManager();             // Appel au manager
    $users = $manager->findAll();             // Récupération des utilisateurs

    // On rend la variable $users disponible pour la vue
    // et on affiche le layout avec le bon template
    $route = 'users/list.phtml';
    require 'templates/layout.phtml';
}
✅ 2. Fichier : managers/UserManager.php
Tu dois déjà avoir une méthode comme celle-ci dans ta classe UserManager :

php
Copier
Modifier
public function findAll(): array
{
    $query = $this->db->query("SELECT * FROM users");
    return $query->fetchAll(PDO::FETCH_ASSOC); // ← tableau associatif
}
✔️ Cette méthode retourne un tableau associatif contenant tous les utilisateurs.

✅ 3. Fichier : templates/users/list.phtml
C’est ici que tu affiches le tableau des utilisateurs.

php
Copier
Modifier
<h1>Liste des utilisateurs</h1>

<?php if (!empty($users)): ?>
    <table border="1" cellpadding="5">
        <thead>
            <tr>
                <th>ID</th>
                <th>Email</th>
                <th>Prénom</th>
                <th>Nom</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
                <tr>
                    <td><?= htmlspecialchars($user['id']) ?></td>
                    <td><?= htmlspecialchars($user['email']) ?></td>
                    <td><?= htmlspecialchars($user['first_name']) ?></td>
                    <td><?= htmlspecialchars($user['last_name']) ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php else: ?>
    <p>Aucun utilisateur trouvé.</p>
<?php endif; ?>
✅ 4. Fichier : config/Router.php
Assure-toi que dans le else, la méthode list() est bien appelée :

php
Copier
Modifier
else {
    $controller->list(); // <- si aucune route ne correspond, afficher la liste
}