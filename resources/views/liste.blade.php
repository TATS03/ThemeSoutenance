<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Affichage des données</title>
    <style>
        /* Styles CSS pour le menu glissant */
        .dropdown-menu {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            padding: 10px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        .dropdown:hover .dropdown-menu {
            display: block;
        }

        /* Nuances de bleu */
        body {
            background-color: #ecf5ff;
            color: #333;
        }

        h1 {
            color: #0047b3;
        }

        th {
            background-color: #d9e8ff;
            color: #0047b3;
        }

        td {
            background-color: #f2f8ff;
        }
    </style>
</head>
<body>
    <h1>Affichage des données</h1>

    <table class="dropdown">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Lieu de dépôt</th>
                <th>Heure de dépôt</th>
                <th>Pièces jointes</th>
                <th>Exemple de la requête manuscrite</th>
                <!-- Ajoutez ici les autres colonnes nécessaires à votre base de données -->
            </tr>
        </thead>
        <tbody>
            @foreach($donnees as $donnee)
                <tr>
                    <td>{{ $donnee->nom }}</td>
                    <td>{{ $donnee->lieu_depot }}</td>
                    <td>{{ $donnee->heures_depot }}</td>
                    <td>{{ $donnee->pieces_jointes }}</td>
                    <td>
                        <a href="{{ $donnee->maquette }}" download onclick="renameFile(this, '{{ $donnee->maquette }}')">{{ $donnee->maquette }}</a>
                    </td>
                    <!-- Ajoutez ici les autres colonnes nécessaires à votre base de données -->
                </tr>
            @endforeach
        </tbody>
    </table>

    <script>
        // JavaScript pour activer le menu glissant
        const dropdowns = document.querySelectorAll('.dropdown');
        dropdowns.forEach((dropdown) => {
            dropdown.addEventListener('mouseover', () => {
                dropdown.classList.add('active');
            });

            dropdown.addEventListener('mouseout', () => {
                dropdown.classList.remove('active');
            });
        });

        function renameFile(link, originalFileName) {
            const extension = originalFileName.substring(originalFileName.lastIndexOf('.'));
            const newFileName = originalFileName + extension;
            link.download = newFileName;
        }
    </script>
</body>
</html>