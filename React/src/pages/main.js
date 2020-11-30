import React from 'react';
import { NavBar } from '../components/navBar';
import { SideBar } from '../components/sideBar';
import { Footer } from '../components/footer';
import { BrowserRouter as Router, Switch,Route } from 'react-router-dom';

import {Inicio} from './main/inicio';

export const Main = () => {
    return (
        <Router>
        <div id="right-panel" className="right-panel">
            <NavBar></NavBar>
            <SideBar></SideBar>
            <Switch>
                <Route path='/' component={Inicio} exact>
                </Route>
            </Switch>
            <div className="clearfix"></div>
            <Footer></Footer>
        </div>
        </Router>

    );
}