class menumain extends HTMLElement {
    constructor() {
        super();
    }

    connectedCallback() {
        this.innerHTML = `
        <img src="../assets/img/logo.png" alt="">
            <nav>
                <ul>
                    <li>
                        <a href="bienvenida.php">
                        <lord-icon
                            title="Registra tu mascota"
                            src="https://cdn.lordicon.com/odgzzleh.json"
                            trigger="hover"
                        </lord-icon>
                        </a>
                        </li>

                        <li>
                        <a href="modulo1.php">
                            <lord-icon class="icon"
                                title="Mis mascotas"
                                src="https://cdn.lordicon.com/oqaajvyl.json"
                                trigger="hover">
                            </lord-icon>
                        </a>
                    </li>
                    </ul>
                </nav>
                  
            <div class="exit">
                <a href="../db/logout.php">
                    <lord-icon class="icon"
                        title="Cerrar sesion"
                        src="https://cdn.lordicon.com/ynooheet.json"
                        trigger="boomerang">
                    </lord-icon>
                </a>
                
            </div>
        `;
    }
}

window.customElements.define("menu-main", menumain);