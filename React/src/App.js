import { Registro } from './pages/registro';
import {RegistroEmpresa} from './pages/registroEmpresa';
import {RegistroUsuario} from './pages/registroUsuario';
import {Login} from './pages/login';
import {Main} from './pages/main';
import RutaPrivada from "./rutas/rutas";

import logo from './logo.svg';
import { BrowserRouter as Router, Switch, Route } from 'react-router-dom';
function App() {
  return (
    <Router>
      <Switch>
      <Route path='/'  component={Login} exact>
        </Route>
        <Route path='/registro' exact>
        <Registro></Registro>
        </Route>
        <Route path='/registroUsuario' exact>
        <RegistroUsuario></RegistroUsuario>
        </Route>
        <Route path='/registroEmpresa' exact>
        <RegistroEmpresa></RegistroEmpresa>
        </Route>
        <RutaPrivada path='/main' component={Main} exact>
        </RutaPrivada>
      </Switch>
    </Router>
   
  );
}

export default App;
