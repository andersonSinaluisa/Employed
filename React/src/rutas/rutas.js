import React from "react";
import { useSelector } from "react-redux";
import { Route, Redirect } from "react-router-dom";
const RutaPrivada = ({ component: Component, ...props }) => {
    const id_usuario = useSelector((store) => store.auth.payload.id_usuario);
    console.log(id_usuario)
    const token = useSelector((store) => store.auth.payload.token);
    return (
        <Route
            {...props}
            render={(props) =>
                token === null && id_usuario === null ? (
                    <Redirect to="/" />
                ) : (
                        <Component {...props} />
                    )
            }
        />
    );
};

export default RutaPrivada;