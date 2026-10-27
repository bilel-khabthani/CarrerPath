# CarrerPath

CarrerPath is a PHP-based web application designed to help manage job placement/career path activities. It appears to follow a simple MVC structure (Controller/Model/View) and includes several modules for managing users, job offers, applications, interviews, formations, and complaints/reclamations.

## Modules

Based on repository branches and content:

- **Gestion Utilisateur (`Crud user/`)** - User management (CRUD), specialities, formations, offers/applications, reclamations/reponses.
- **Gestion des Offres (`G.Offres/`)** - Job offers and candidatures (applications).
- **Entretien (`Controller/`, `Model/`, `View/`)** - Interview management (ajouter, consulter, modifier, supprimer entretiens).
- **Formation** - Training/formation management (present on branches).
- **Reclamation** - Complaint/reclamation handling (present via GestionUtilisateur models/controllers).

## Tech Stack

- **Backend:** PHP
- **Frontend:** HTML/CSS/JS (Bootstrap, custom assets in `View/` and dashboard templates)
- **Database:** MySQL (typical PHP setup; config files referenced, e.g. `config.php`)
- **Assets:** Azia Admin Dashboard template included in various views

## Project Structure (representative)

```
CarrerPath/
├── Controller/        # Controllers (e.g. entretienC.php, ...)
├── Model/             # Models (e.g. entretien.php, ...)
├── View/              # Views, assets, templates (Dashboard, forms, listings)
├── Crud user/         # User/formation/specialite/reclamation module
├── G.Offres/          # Offers/candidatures module
└── README.md
```

Structure varies slightly across branches/modules; some modules are organized under subfolders.

## Getting Started

### Prerequisites
- PHP 7.x+ (compatible with typical XAMPP/WAMP/LAMP)
- MySQL/MariaDB
- Web server (Apache/Nginx) or use local stack like XAMPP

### Installation
1. Clone the repository:
   ```bash
   git clone https://github.com/bilel-khabthani/CarrerPath.git
   ```
2. Import the database schema if available (look for `.sql` files in branches/modules).
3. Configure database connection (check `config.php` files in modules like `G.Offres/config.php` or similar).
4. Place the project in your web server's document root (e.g., `htdocs/` for XAMPP).
5. Access via `http://localhost/CarrerPath/...` depending on module paths.

### Notes
- Some modules include a full Dashboard template (Azia) with docs/gulpfile - mostly for UI.
- Filenames contain some French terms (entretien, formation, réclamation/offre/candidature).

## Branches
- `main` - initial state
- `entretien` - interview management
- `gestion-des-offres` - offers & applications
- `GestionUtilisateur` - users, formations, specialities, reclamations
- `formation`, `gestionreclamation` - additional modules

## Contributing
Feel free to open issues/PRs. Follow existing MVC conventions and keep UI consistent with the dashboard templates used.

## License
See LICENSE files in dashboard submodules if present.
