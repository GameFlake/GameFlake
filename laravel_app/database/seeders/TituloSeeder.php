<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TituloSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('titulo')->insert([
            [
                "idTitulo" => 1,
                "nombre" => "Crash Bandicoot: Insane Trilogy",
                "fechaLanzamiento" => "2019-04-12",
                "edicion" => "Estándar",
                "imgRuta" => "img/crash.jpeg",
                "descripcion" => "¡Vuelve Crash Bandicoot™, tu marsupial favorito! Mejorado, embelesado y listo para bailar con la colección de juegos La trilogía. Ahora puedes disfrutar de Crash Bandicoot™ como nunca antes. Gira, salta, rompe, enfréntate a los épicos desafíos y vive las aventuras de los tres juegos con los que empezó todo: Crash Bandicoot™, Crash Bandicoot™ 2: Cortex Strikes Back y Crash Bandicoot™: Warped. ¡Vuelve a vivir tus momentos favoritos de Crash con gráficos remasterizados y prepárate para disfrutar a tope!",
                "calificacion" => "5",
            ],
            [
                "idTitulo" => 2,
                "nombre" => "Mario Kart 8",
                "fechaLanzamiento" => "2017-03-17",
                "edicion" => "Estándar",
                "imgRuta" => "img/mariokart.jpeg",
                "descripcion" => "¡Calienta motores en la versión definitiva de Mario Kart™ 8 y juega donde y cuando quieras! Compite con tus amigos en carreras o en el modo batalla, que incluye circuitos nuevos y otros ya conocidos. Juega en el modo local y en 1080p en partidas de hasta 4 jugadores en el modo televisor. Todos los circuitos de la versión de Wii U, incluyendo el contenido descargable, están disponibles. Además, ¡los inklings aparecen como personajes invitados junto con otro personajes de juegos anteriores, como el Rey Bú, Huesitos y Bowser Jr!",
                "calificacion" => "4",
            ],
            [
                "idTitulo" => 3,
                "nombre" => "The Legend of Zelda: Breath of the Wild",
                "fechaLanzamiento" => "2017-03-18",
                "edicion" => "Estándar",
                "imgRuta" => "img/zelda.jpeg",
                "descripcion" => "Olvida todo lo que sabes acerca de los juegos de la serie The Legend of Zelda. Explora y descubre un mundo lleno de aventuras en The Legend of Zelda: Breath of the Wild, una nueva saga que rompe los esquemas de la aclamada serie. Viaja a través de praderas y bosques, y alcanza cimas de montañas mientras descubres cómo cayó en la ruina el reino de Hyrule en esta emocionante aventura al aire libre. Ahora con Nintendo Switch, tu aventura será más libre y extensa que nunca. Lleva tu consola y vive una gran aventura como Link de la manera que más te guste.",
                "calificacion" => "5",
            ],
            [
                "idTitulo" => 4,
                "nombre" => "Little Nightmares II",
                "fechaLanzamiento" => "2020-11-20",
                "edicion" => "Deluxe",
                "imgRuta" => "img/nightmares.jpeg",
                "descripcion" => "Regresa a un cautivante mundo de terror en Little Nightmares II, un juego de aventura y suspenso en donde te pondrás en los zapatos de Mono, un niño atrapado en un mundo distorsionado por la ruidosa señal de una lejana torre de transmisión. Conoce a Six, la chica del impermeable amarillo que será la nueva compañera de Mono y descubre los oscuros secretos que guarda la torre de transmisión. El camino no será sencillo: Mono y Six tendrán que enfrentar a los amenazantes y terribles residentes de este mundo. ¿Te atreverás a sumergirte con nuestros héroes en esta nueva serie de pequeñas pesadillas?",
                "calificacion" => "4",
            ],
            [
                "idTitulo" => 5,
                "nombre" => "Overcooked 2",
                "fechaLanzamiento" => "2018-08-07",
                "edicion" => "Deluxe",
                "imgRuta" => "img/overcooked2.jpeg",
                "descripcion" => "¡Overcooked vuelve con un nuevo y caótico juego de cocina en acción! Regresa al Reino de la Cebolla y organiza tu equipo de chefs en un cooperativo clásico o en partidas en línea de hasta cuatro jugadores. Aférrate a tu delantal... es hora de salvar el mundo (¡otra vez!)",
                "calificacion" => "3",
            ]
        ]);
    }
}
