document.addEventListener("DOMContentLoaded", function () {
    const recuadros = document.querySelectorAll(".recuadro");
    let activeIndex = 0; // Iniciamos en el recuadro del medio

    function updateActiveRecuadro() {
        recuadros.forEach((recuadro, index) => {
            if (index === activeIndex) {
                recuadro.classList.add("recuadro-medio");
                recuadro.classList.remove(
                    "recuadro-izquierda",
                    "recuadro-derecha"
                );
            } else if ((index + 1) % recuadros.length === activeIndex) {
                recuadro.classList.add("recuadro-derecha");
                recuadro.classList.remove(
                    "recuadro-izquierda",
                    "recuadro-medio"
                );
            } else {
                recuadro.classList.add("recuadro-izquierda");
                recuadro.classList.remove("recuadro-medio", "recuadro-derecha");
            }
        });
        activeIndex = (activeIndex + 1) % recuadros.length;
    }

    setInterval(updateActiveRecuadro, 5000);
    updateActiveRecuadro();
});
