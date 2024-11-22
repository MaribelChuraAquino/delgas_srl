document.addEventListener("DOMContentLoaded", function() {
    const themeSelector = document.getElementById("themeSelector");
    const themeOptions = document.getElementById("themeOptions");
    const themeButtons = document.querySelectorAll(".theme-option");

    // Mostrar/Ocultar las opciones de tema
    themeSelector.addEventListener("click", function() {
        console.log("Botón presionado");
        themeOptions.classList.toggle("show");
        themeSelector.classList.toggle("active");
    
        // Confirmar si la clase "show" se agrega correctamente
        console.log(themeOptions.classList.contains("show"));
    });
    

    // Cerrar al hacer clic fuera
    document.addEventListener("click", function(e) {
        if (!e.target.closest('.theme-selector')) {
            themeOptions.classList.remove('show');
            themeSelector.classList.remove('active');
        }
    });

    // Seleccionar tema
    themeButtons.forEach(button => {
        button.addEventListener("click", function() {
            // Remover selección previa
            themeButtons.forEach(opt => opt.classList.remove('selected'));
            
            // Agregar nueva selección
            this.classList.add('selected');
            
            // Actualizar el texto del botón
            themeSelector.textContent = this.querySelector('.theme-name').textContent;
            
            // Cerrar el menú
            themeOptions.classList.remove('show');
            themeSelector.classList.remove('active');

            // Aplicar el tema seleccionado
            const theme = this.getAttribute("data-theme");

            // Cambiar el tema según lo que seleccionó
            if (localStorage.getItem("theme") === theme) {
                resetTheme();  // Resetea los estilos al estado original
            } else {
                changeTheme(theme);  // Aplica el nuevo tema
            }
        });
    });

    // Función para cambiar el tema
    function changeTheme(theme) {
        // Deshabilitar todos los temas
        document.getElementById("tema-niños").disabled = true;
        document.getElementById("tema-jovenes").disabled = true;
        document.getElementById("tema-adultos").disabled = true;

        // Habilitar el tema seleccionado
        if (theme === 'niños') {
            document.getElementById("tema-niños").disabled = false;
        } else if (theme === 'jovenes') {
            document.getElementById("tema-jovenes").disabled = false;
        } else if (theme === 'adultos') {
            document.getElementById("tema-adultos").disabled = false;
        }

        // Guardar el tema seleccionado en localStorage para persistirlo
        localStorage.setItem("theme", theme);
    }

    // Función para resetear el tema y restaurar los estilos por defecto
    function resetTheme() {
        // Deshabilitar todos los temas
        document.getElementById("tema-niños").disabled = true;
        document.getElementById("tema-jovenes").disabled = true;
        document.getElementById("tema-adultos").disabled = true;

        // Restaurar el tema original (sin tema específico)
        localStorage.removeItem("theme"); // Eliminar el tema guardado
    }

    // Aplicar el tema guardado desde localStorage al recargar la página
    const savedTheme = localStorage.getItem("theme");
    if (savedTheme) {
        changeTheme(savedTheme); // Aplicar el tema guardado
    }
});
