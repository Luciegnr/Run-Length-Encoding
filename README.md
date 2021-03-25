# Run-Length-Encoding

## 1-rle
### Sujet

Écrivez les deux fonctions suivantes :

encode_rle(string $str)
 - prend en paramètre une chaîne de caractères contenant uniquement des caractères alphabétiques (a-z et A-Z)
 - retourne une chaîne compressée en utilisant le RLE; en cas d'erreur, retourne la chaîne $$$
decode_rle(string $str)
 - prend en paramètre une chaîne de caractères qui sera au même format que celles retournées par encode_rle
 - retourne une chaîne décompressée (contenant uniquement des caractères alphabétiques) en utilisant le RLE; en cas d'erreur, retourne la chaîne $$$
Une fois les fonctions implémentées, écrivez un programme rle.php utilisant ces fonctions pour permettre la compression / décompression de chaînes de caractères via le RLE.

Le programme doit récupérer l'action à accomplir (encode ou decode) ainsi que la chaîne à traiter dans les arguments du programme. Le résultat doit être affiché sur la sortie standard, suivi d'un retour à la ligne.

Voici un exemple d'utilisation : 
![](https://i.imgur.com/xFDMn60.png)

## 2-advanced_rle
### Sujet

Écrivez les deux fonctions suivantes :

encode_advanced_rle(string $input_path, string $output_path)
 - compresse les données contenues dans le fichier indiqué par input_path avec le RLE avancé et écrit le résultat dans le fichier indiqué par output_path
 - retourne 0 si tout s'est bien passé, ou 1 pour indiquer une erreur
decode_advanced_rle(string $input_path, string $output_path)
 - décompresse les données contenues dans le fichier indiqué par input_path avec le RLE avancé et écrit le résultat dans le fichier indiqué par output_path
 - retourne 0 si tout s'est bien passé, ou 1 pour indiquer une erreur
Une fois les fonctions implémentées, écrivez un programme rle.php utilisant ces fonctions pour permettre la compression / décompression de fichiers via le RLE avancé.

Le programme doit récupérer l'action à accomplir (encode ou decode) ainsi que les chemins des fichiers à traiter dans les arguments du programme.
Si tout se passe bien, votre programme devra afficher OK sur la sortie standard, suivi d'un retour à la ligne.
En cas d'erreur, vous afficherez KO sur la sortie standard, suivi d'un retour à la ligne, sans créer le fichier d'output.

Voici un exemple d'utilisation :
