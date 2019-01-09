<ol>
    <li>Créer une class Personnage (class/Personnage.php)</li>
    <li>Un personnage a :
        <ul>
            <li>Points de vie ($vie) 80 points</li>
            <li>Points d'attaque ($atk) 20 points</li>
            <li>Nom ($name)</li>
            <li>$name doit être passé en paramètre de la fonction __construct()</li>
            <li>
                Bonus : Faire un système de points d'armure
                <ul>
                    <li>10 points d'armure par défaut ($armure)</li>
                    <li>Lorsque que l'on subit une attaque de 20 dégats, les dégats réel seront de (20 - 10)</li>
                </ul>
            </li>
        </ul>
    </li>
    <li>Méthode :
        <ul>
            <li>getName() </li>
            <li>setName()</li>
            <li>getVie()</li>
            <li>setVie()</li>
            <li>heal($pv) rend les points de vie</li>
            <li>Bonus : attaque($cible)</li>
        </ul>
    </li>
</ol>
