import React from 'react';

export const RegistroEmpresa = () => {
    return (<div className="container">
        <form className="row FormLogin" action="<?php echo SERVERURL ?>ajax/empresaAjax.php" method="POST">
            <div className="col-12 text-center">
                <h3>Ingresa los datos de tu empresa</h3>
            </div>
            <div className="col-6">
                <div className="form-group">
                    <label>Nombre Empresa</label>
                    <input type="text" className="form-control" name="empresa" placeholder="Empresa" />
                </div>
                <div className="form-group">
                    <label>Representante</label>
                    <input type="text" className="form-control" name="representante" placeholder="Representante" />
                </div>
                <div className="form-group">
                    <label>Identificacion</label>
                    <input type="text" className="form-control" name="identificacion" placeholder="Identificacion" />
                </div>
            </div>
            <div className="col-6">
                <div className="form-group">
                    <label>Pais</label>
                    <select className="form-control" name="pais" id="pais">

                    </select>
                </div>
                <div className="form-group">
                    <label>Ciudad</label>
                    <input type="text" className="form-control" name="ciudad" placeholder="Ciudad" />
                </div>
                <div className="form-group">
                    <label>Direccion</label>
                    <input type="text" className="form-control" name="direccion" placeholder="direccion" />
                </div>
            </div>
            <div className="col-12">
                <div className="form-group">
                    <label>Sector de la Empresa</label>
                    <select className="form-control" name="sector">
                        <option>Area</option>
                    </select>
                </div>
                <button type="submit" className=" rounded-pill btn btn-primary btn-flat m-b-30 m-t-30">Registrar</button>

                <div className="register-link m-t-15 text-center">
                    <p>Already have account ? <a href="#"> Sign in</a></p>
                </div>
            </div>
            <div className="RespuestaAjax"></div>
        </form>

    </div>);
}