    var logos = document.getElementsByClassName('logo');
        var cuadroInteraccion = document.getElementById('cuadrodeinteraccion');
        var cuadrito2 = document.getElementById('cuadrito2');
        var texto = document.getElementById('texto');
        var logotipo = document.getElementById('logotipo');

        for (var i = 0; i < logos.length; i++) {
            logos[i].addEventListener('mouseover', function () {
                cuadroInteraccion.style.display = 'block';
                cuadrito2.style.display = 'none';
                var id = this.getAttribute('id');
                texto.textContent = 'Hola, soy el id=' + id;
            });

            logos[i].addEventListener('mouseout', function () {
                cuadroInteraccion.style.display = 'none';
                cuadrito2.style.display = 'block';
                texto.textContent = '';
            });
        }

        logotipo.addEventListener('mouseout', function () {
            cuadroInteraccion.style.display = 'block';
        });