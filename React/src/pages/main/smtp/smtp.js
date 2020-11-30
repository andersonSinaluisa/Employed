import React from 'react';

export const Smtp =()=>{

    return(
        <div class="row">
        <div class="col-lg-12 col-md-12 card p-1">

            <div class="stat-widget-five">
                <div class="stat-icon dib flat-color-1">
                </div>
                <div class="stat-content">
                    <div class="text-left dib">
                        <div class="stat-text">SERVIDOR DE CORREOS</div>
                        <div class="stat-heading">SMTP</div>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-md-4 col-sm-2 col-lg-4 col-xl-4">

        </div>
        <div class="col-12 col-md-4 col-sm-8 col-lg-4 col-xl-4 card p-5">
            <form class="FormLogin" action="<?php echo SERVERURL ?>ajax/smtpAjax.php" method="POST">
                <div class="form-group">
                    <label>SMTP</label>
                    <input type="text" class="form-control" name="smtp" placeholder="SMTP"/>
                </div>
                <div class="form-group">
                    <label>PUERTO</label>
                    <input type="text" class="form-control" name="port" placeholder="PUERTO"/>
                </div>
                <div class="form-group">
                    <label>SSL</label>
                    <input type="checkbox" class="form-check" name="encryp"/>
                </div>
                <div class="form-group">
                    <label>USUARIO</label>
                    <input type="text" class="form-control" name="user" placeholder="USUARIO"/>
                </div>
                <div class="form-group">
                    <label>CONTRASEÑA</label>
                    <input type="text" class="form-control" name="pass" placeholder="PUERTO"/>
                </div>
                <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">GUARDAR</button>
                <div class="RespuestaAjax"></div>
            </form>

        </div>
        <div class="col-md-4 col-sm-2 col-lg-4 col-xl-4">

        </div>
    </div>
    );
}