import axios from "axios";
import {URLAPI} from '../../config/axios';
const defaultState = {
  payload: {
    id_usuario:null,
    username:null,
    nombres:null,
    apellidos:null,
    id_rol:null,
    token:null,
    id_persona:null,
    id_main:null,
    id_empresa:null,
    msj:null
  },
  
};
const LOGIN = 'LOGIN';
const ERROR = 'ERROR';
export function authReducer(state = defaultState, data) {

  switch (data.type) {
    case LOGIN:
      return { payload: data.payload };
    case ERROR:
      return{ payload: data.payload };
    default:
      return state;
  }
}
export const LoginRequest = (user, password) => async (dispatch, getState) => {
  const proxy = "https://cors-anywhere.herokuapp.com/";
  var formDa = new FormData();
  formDa.append('username', user);
  formDa.append('password', password);

  const URL =URLAPI+"login/";
  try {
    const res = await axios.post(URL, formDa);
    dispatch({ type: LOGIN, payload: res.data });
  } catch (e) {
    
    dispatch({
      type: ERROR,
      payload: {msj:e}
    });
  }
};