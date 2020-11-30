import React, { useEffect, useState } from 'react';
import { useDispatch, useSelector } from 'react-redux';
export const Inicio = (props) => {
    const token = useSelector((store) => store.auth.payload.token);
    const id_usuario = useSelector((store) => store.auth.payload.id_usuario);
    const dataMenu = useSelector((store) => store.menu.payload);
    const [data, setData] = useState(null);

    useEffect(() => {
        if (id_usuario != null) {
            if (dataMenu.length > 0) {
                setData(dataMenu);
            }
        } else {
            props.history.push("/");
        }

    });

    const SenData = (e) => {
        e.preventDefault();
        let array = [];
        const check = e.target.menu;
        check.forEach(element => {
            if (element.checked) {
                array.push(element.value);
            }
        });

    }



    return (
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card p-5">
                        <div class="container">
                            <form onSubmit={(e) => SenData(e)}>
                                <div class="row">
                                    <div class="col-12 text-center">
                                        <h3>Escoge los menús que necesitarás para tu empresa</h3>
                                    </div>
                                </div>
                                <div class="row">
                                    <br></br>


                                    {
                                        data != null ?
                                            (
                                                data.map(res => {

                                                    return (
                                                        <div className="col-12 col-sm-6 col-lg-3 col-md-6 p-3 form-group form-check">
                                                            <h3>{res.nombre}</h3>
                                                            <br></br><br></br><br></br>
                                                            {res[0].map(r => {
                                                                return (
                                                                    <div class="#">
                                                                        <input type="checkbox" id="menu" value={r.id_menu} /> <label for={r.id_menu}>{r.menu}<i className={r.icono}></i></label>
                                                                    </div>
                                                                )
                                                            })}
                                                        </div>

                                                    )

                                                })
                                            ) : (
                                                <h1>NO HAY </h1>
                                            )
                                    }



                                </div>
                                <div class="row">
                                    <div id="res">
                                    </div>
                                    <input type="submit" value="Guardar" name="button_menus" id="enviar" class="btn btn-block btn-primary rounded-pill" />
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    )
}