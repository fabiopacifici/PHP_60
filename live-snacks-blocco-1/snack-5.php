<?php


/* 
## Snack 5

Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo.
*/
$text  = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt quis beatae cumque officiis, perspiciatis ipsam, consequuntur ea rerum provident aut eius? Numquam minus vel molestiae esse, aperiam saepe repellendus ipsam asperiores expedita sunt, sapiente consectetur debitis? Magni repellat dignissimos quis qui ea, mollitia error iure, repellendus illum quisquam quo odit sequi! Quasi iure numquam aliquam repudiandae ad ratione accusamus id sunt sit quis non architecto ipsam voluptates libero incidunt consequuntur, alias nisi quaerat similique. Fuga, velit? Animi omnis ea, illum nemo consectetur sapiente! Obcaecati perspiciatis consequuntur voluptatibus et, dolore voluptatem perferendis veritatis commodi tempore incidunt sint ipsum aut cumque minima numquam, quasi eaque pariatur quaerat quis. Repellat neque quisquam et incidunt placeat ducimus fugiat aliquid, optio excepturi, quae provident dicta corporis voluptas. Expedita tempore id minus quos porro, dolores fugiat aperiam doloremque nam rem officia consequuntur mollitia. Nesciunt rem quisquam error quam est atque officiis veniam quae sint eaque. Natus quam, ea fuga tempora temporibus eos provident aut blanditiis accusantium. Facilis harum culpa ipsum aperiam illo natus numquam possimus sint tenetur dignissimos consectetur ratione, sed corrupti esse deleniti officiis sequi? Illo in, quae quos laborum reprehenderit doloribus, odit debitis molestiae ratione sapiente eligendi maxime harum explicabo quas, soluta nam architecto veniam dolores. Libero reiciendis iste error voluptatum, eveniet quos consectetur, facere iusto enim eos suscipit consequuntur labore dicta eligendi nemo voluptates sapiente atque laboriosam, beatae ab odit quis ea quisquam! Non ex odit explicabo ab corrupti libero obcaecati tempora sed sit ipsa molestias vitae, id placeat quaerat perspiciatis esse. Doloremque porro cumque sunt ad, corporis totam quisquam vero repellendus amet, modi autem iste enim quod eius maxime quia officia a eum accusamus, odit debitis harum quo dignissimos? Eligendi eos recusandae assumenda veritatis quo nam, beatae sequi ipsam repudiandae, deserunt quaerat! Dolor, delectus aperiam et enim aliquam, aut corrupti mollitia dolore explicabo voluptates porro odit necessitatibus, voluptate laboriosam? Repudiandae itaque aspernatur, neque tempora quam voluptatum eum illum nulla quibusdam adipisci laborum perspiciatis cumque nisi cum nam eius laudantium. Expedita repellat ab quasi! Possimus eum ducimus exercitationem laudantium itaque vitae rerum alias, cumque officiis adipisci aliquam sit aspernatur ea praesentium, excepturi fuga eveniet ex sapiente aut eaque ipsam deleniti? Facilis, exercitationem assumenda! Atque exercitationem quam adipisci ad ab, iusto magnam nam minus nobis laudantium. Ratione delectus aliquid labore dignissimos libero architecto recusandae totam natus consequatur sapiente, et voluptate eaque suscipit laboriosam, enim nesciunt quis exercitationem tenetur autem. Quas expedita sapiente similique omnis, tenetur dolorem modi quam eaque ab earum quisquam molestias rerum aliquid eius, eos neque voluptas temporibus voluptates vel delectus. Voluptatem, eaque magni. Quo sed beatae obcaecati nemo, quae at praesentium minima placeat corporis fugiat ipsam reprehenderit consequatur ea consectetur facere amet pariatur. Placeat consequuntur cum quos cumque sunt culpa nisi enim voluptas veritatis vel, nulla rerum, quaerat doloribus. Non unde nobis autem cumque numquam dolores corporis aliquid quidem corrupti amet! Inventore, quis sunt! Sit debitis explicabo iusto consequatur voluptates quidem nisi nam nihil ullam dicta beatae, aliquam officiis praesentium esse modi perspiciatis fuga? Quibusdam autem neque fugiat et, assumenda provident!";
$contentArray = explode(".", $text);
var_dump($contentArray);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h1>Articolo</h1>
  <?php foreach ($contentArray as $paragraph) : ?>
    <p><?php echo $paragraph; ?>.</p>
  <?php endforeach; ?>
</body>

</html>