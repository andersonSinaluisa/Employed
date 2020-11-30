import React,{ useState, useEffect } from 'react';
import {Link} from 'react-router-dom';
import { useSelector, useDispatch } from "react-redux";
import {LoginRequest} from '../redux/reducer/authModule';
import { getMenus } from '../redux/reducer/confModule';
import {Alert} from '../components/alert';
export const Login =(props)=>{
    const dispatch = useDispatch();
    const id_usuario = useSelector((store)=>store.auth.payload.id_usuario)
    const user = useSelector((store) => store.auth.payload.username);
    const token = useSelector((store) => store.auth.payload.token);
    const msj = useSelector((store)=>store.auth.payload.msj);
    const [mensaje , SetMsj]=useState(null);
    useEffect(() => { if (user && token && id_usuario){
        dispatch(getMenus(token,id_usuario))
        
        props.history.push("/main");
    } 
    if(msj!=null){
        SetMsj(msj);
    }
});

    const sendData = (e) => {
        e.preventDefault();
        let username = e.target.username.value;
        let password = e.target.password.value;
        dispatch(LoginRequest(username,password));
      };


    return(
        <div classNameName="row">
            <div classNameName="col-xl-2 col-lg-2 col-md-2 col-sm-1 hidden-xs"></div>
            <div className="col-xl-8 col-lg-8 col-md-8 col-sm-10 col-xs-12  p-5">
            <form className="#" onSubmit={(e)=>{sendData(e)}}>

                {
                    mensaje ? (
                        <Alert text={mensaje} tipo="danger"></Alert>
                    ):(
                        null
                    )
                }
                <div className="form-group">
                    <label>Usuario</label>
                    <input type="text" className="form-control" id="username" name="username" placeholder="Usuario" />
                </div>
                <div className="form-group">
                    <label>Contraseña</label>
                    <input type="password" className="form-control" id="password" name="password" placeholder="Contraseña" />
                </div>
                <div className="checkbox">
                    <label>
                        <input type="checkbox" /> Recordar
                            </label>
                    <br />
                    <label className="pull-right">
                        <a href="#"  classNameName="btn btn-link">Olvidaste tu contraseña?</a>
                    </label>

                </div>
                <input type="submit" className="rounded-pill btn btn-primary " value="Iniciar "/>

                <div className="register-link m-t-15 text-center">
                    <p>Quieres regitrar tu empresa ? <Link to="/registro" classNameName="btn btn-link">Registrate aqui</Link></p>
                </div>
                <div className="RespuestaAjax"></div>

            </form>
        </div>
            <div classNameName="col-xl-2 col-lg-2 col-md-2 col-sm-1 hidden-xs"></div>
        </div>
    )
}