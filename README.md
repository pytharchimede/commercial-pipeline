# Commercial Pipeline

CRM commercial léger pour suivre la prospection FINEA et les missions de développement logiciel.

## Fonctions
- Tableau de bord KPI
- Pipeline commercial Kanban
- Fiches prospects et historique
- Recherche et filtres
- Échéances / relances
- Opportunités hors BTP
- Données JSON faciles à remplacer par une API/backend plus tard

## Démarrage
Ouvrir `index.html` directement ou servir le dossier avec un serveur statique.

## Déploiement
Compatible GitHub Pages, cPanel, Netlify ou tout hébergement statique.

## Structure
- `index.html`
- `assets/app.js`
- `assets/style.css`
- `data/prospects.json`
- `data/opportunities.json`


## Synchronisation Gmail

L'interface GitHub Pages ne contient **aucun secret Gmail**.

Flux prévu :

`Gmail -> backend privé / tâche de synchronisation -> snapshot CRM -> GitHub Pages`

Le frontend charge `data/mail-sync.json` sans cache et fusionne les événements avec les prospects.

Le fichier `backend/sync.php` est un squelette destiné à un hébergement PHP privé. Les identifiants OAuth Gmail et `SYNC_SECRET` doivent être stockés en variables d'environnement, jamais dans ce dépôt public.

### État actuel

Le snapshot initial contient la réponse de Prospective Ivoirienne. La synchronisation Gmail permanente nécessite le déploiement du backend privé et l'autorisation OAuth Gmail côté serveur.
