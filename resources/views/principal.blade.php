@extends("menu")

@section("titulo", "COLEGIO SAN LUIS")

@section("contenido")
<style>
    h1 {
        text-align: center;
        animation: bienvenidos 1s ease-in-out;
    }

    @keyframes bienvenidos {
        0% {
            opacity: 0;
            transform: scale(0.8);
        }

        100% {
            opacity: 1;
            transform: scale(1);
        }
    }

    .logo {
        display: block;
        margin: 0 auto;
        width: 40%;
        /* Ajusta el ancho de la imagen */
        height: 40%;
        /* Ajusta el largo de la imagen de forma proporcional */
        opacity: 0;
        /* Inicia con opacidad 0 */
        transition: opacity 1s ease-in-out, transform 0.3s ease-in-out;
        /* Transición de opacidad en 1 segundo y de transformación en 0.3 segundos */
    }

    .logo.loaded {
        opacity: 1;
        /* Al cargar la imagen, cambia la opacidad a 1 */
    }

    .logo:hover {
        transform: scale(1.03);
        /* Agrandar la imagen al 110% */
        transition: transform 0.3s ease-in-out;
        /* Transición suave de 0.3 segundos */
    }
</style>
<div class="container mt-3">
    <h1>¡BIENVENIDOS!</h1>
    <hr />
    <img src="https://scontent-lim1-1.xx.fbcdn.net/v/t39.30808-6/307319000_463287842507094_5120464456740390743_n.png?_nc_cat=108&ccb=1-7&_nc_sid=09cbfe&_nc_eui2=AeE6ghV7wfk-_neU9C21SmCJph803_liSKqmHzTf-WJIqhY7-wt1EVFiR4WiyUb46awMyBpsNlb0X7G3xwhTMsQK&_nc_ohc=RsxXpHN3YXQAX_FJuyr&_nc_ht=scontent-lim1-1.xx&oh=00_AfCVfOtj_KcszqeQe3cWrZvRYaY9lW2WwHSq0KBmXtCVuA&oe=64522EFA" alt="IES" class="logo">
</div>
<script>
    // Al cargar la página, espera un momento y agrega la clase "loaded" al elemento "img"
    window.onload = function() {
        setTimeout(function() {
            document.querySelector(".logo").classList.add("loaded");
        }, 500); // Espera 0.5 segundos antes de agregar la clase
    };
</script>
@endsection