@yield('container')
@include('layouts.menu')
<main>
    <div class="content">

        <h1 class="logo">Ejemplo de <span>formulario</span></h1>

        <div class="contact-wrapper animated bounceInUp">
            <div class="contact-form">
                <h3>Información</h3>
                <form action="">
                    <p>
                        <label>Nombre</label>
                        <input type="text" name="fullname">
                    </p>
                    <p>
                        <label>Agregar correo</label>
                        <input type="email" name="email">
                    </p>
                    <p>
                        <label>Agregar contraseña</label>
                        <input type="password" name="phone">
                    </p>
                    <p>
                        <label>Adicional</label>
                        <input type="text" name="affair">
                    </p>
                    <p class="contact-form">
                       <label>Mensaje</label> 
                        <textarea name="message" rows="3"></textarea>
                    </p>
                    <p class="block">
                        <button>
                            Send
                        </button>
                    </p>
                </form>
            </div>
            <div class="contact-info">
                <h4>Mas información</h4>
                <ul>
                    <li><i class="fas fa-map-marker-alt"></i> UTVT Santa Maria Atarasquillo</li>
                    <li><i class="fas fa-phone"></i> (111) 111 111 111</li>
                    <li><i class="fas fa-envelope-open-text"></i> contact@website.com</li>
                </ul>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero provident ipsam necessitatibus repellendus?</p>
                <p>Nota.com</p>
            </div>
        </div>        

    </div>
</main>