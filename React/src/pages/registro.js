import React from 'react';
import { Link } from 'react-router-dom';
import {useSelector} from 'react-redux';
export const Registro = () => {
    const s = useSelector((store)=>store)
    console.log(s)
    return (
        <div className="container card p-5">
            <div className="row">
                <div className="col-12 ">
                </div>
            </div>
            <div className="col-12 text-center">
                <h2>Ingresa tus datos correctamente para registrar tu empresa</h2>

            </div>
            <form className="form-row FormLogin " id="form" method="POST" action="#ajax/personaAjax.php">
                <div className="col-12 col-lg-4 col-md-6  col-sm-6">

                    <div className="form-group">
                        <label>Nombres</label>
                        <input type="text" name="nombres" id="nombres" className="form-control" placeholder="Nombres" />
                    </div>
                    <div className="form-group">
                        <label>Apellidos</label>
                        <input type="text" name="apellidos" id="apellidos" className="form-control" placeholder="Apellidos" />
                    </div>
                    <div className="form-group">
                        <label>Genero</label>
                        <select name="genero" className="form-control">
                            <option value="Masculino">MASCULINO</option>
                            <option value="Femenino">FEMENINO</option>
                        </select>
                    </div>
                </div>
                <div className="col-12 col-lg-4  col-md-6 col-sm">

                    <div className="form-group">
                        <label>Identificacion</label>
                        <input type="text" name="identificacion" id="identificacion" className="form-control" placeholder="Identificacion" />
                    </div>
                    <div className="form-group">
                        <label>Pais</label>
                        <select name="pais" id="pais" className="form-control">

                        </select>
                    </div>
                    <div className="form-group">
                        <label>Ciudad</label>
                        <input type="text" name="ciudad" id="ciudad" className="form-control" placeholder="Ciudad" />
                    </div>

                </div>
                <div className="col-12 col-lg-4 col-md-12 col-sm-12">
                    <div className="form-group">
                        <label>Telefono</label>
                        <input type="text" name="telefono" id="telefono" className="form-control" placeholder="Telefono" />
                    </div>
                    <div className="form-group">
                        <label>Direccion</label>
                        <input type="text" name="direccion" id="direccion" className="form-control" placeholder="Direccion" />
                    </div>
                    <div className="form-group">
                        <label>Codigo Postal</label>
                        <input type="text" name="codigo_postal" id="codigo_postal" className="form-control" placeholder="Codigo Postal" />
                    </div>
                </div>

                <div className="col-12 col-lg-4 col-md-12 col-sm-12">


                    <div className="register-link m-t-15 text-center">
                        <div className="checkbox">
                            <label>
                                <input type="checkbox" id="terminos" name="terminos" value="1" /> Acepto los Terminos y Condiciones
                    </label>
                        </div>
                        <input type="submit" className="rounded-pill  btn btn-primary" value="Continuar" />


                        <p>Ya tienes cuenta? <Link to="/"  classNameName="btn btn-link">Iniciar Sesion</Link></p>
                    </div>
                </div>

                <div className="RespuestaAjax"></div>
            </form>

        </div>
    );
}