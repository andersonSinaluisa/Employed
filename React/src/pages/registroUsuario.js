import React from 'react';

export const RegistroUsuario = () => {
    return (
        <div className="container">
            <div className="login-content">
                <div className="login-logo">
                </div>
                <div className="login-form">
                    <form className="FormLogin" method="POST" action="#ajax/usuarioAjax.php">
                        <div className="form-group">
                            <label>Nombre de Usuario</label>
                            <input type="text" name="username" id="username" className="form-control" placeholder="User Name" />
                        </div>
                        <div className="form-group">
                            <label>Correo Electronico</label>
                            <input type="email" name="email" id="email" className="form-control" placeholder="Email" />
                        </div>
                        <div className="form-group">
                            <label>Contraseña</label>
                            <input type="password" name="pass1" id="pass1" className="form-control" placeholder="Password" />
                        </div>
                        <div className="form-group">
                            <label>Repite la Contraseña</label>
                            <input type="password" name="pass2" id="pass2" className="form-control" placeholder="Password" />
                        </div>

                        <button type="submit" className="rounded-pill btn btn-primary btn-flat m-b-30 m-t-30">Register</button>

                        <div className="register-link m-t-15 text-center">
                            <p>Already have account ? <a href="#"> Sign in</a></p>
                        </div>
                        <div className="RespuestaAjax"></div>
                    </form>
                </div>
            </div>
        </div>
    );
}