import axios from "axios";
import { URLAPI } from '../../config/axios';
const defaultState = {
    payload: []
}

const MENU = "MENU";
const ERROR = "ERROR";
const SAVEMENU = "SAVEMENU";
export const menu_reducer = (state = defaultState, data) => {

    switch (data.type) {
        case MENU:
            return { payload: data.payload };
        
        case SAVEMENU:
            return {payload: data.payload};
        case ERROR:
            return {
                ...state
            }
        default:
            return state;
    }
}


export const getMenus = (token, id_usuario) => async (dispatch, getState) => {
    var formDa = new FormData();
    formDa.append('token', token);
    formDa.append('id_usuario', id_usuario);
    const URL = URLAPI + "menu/";

    try {
        const res = await axios.post(URL, formDa);
        dispatch({ type: MENU, payload: res.data });
    } catch (e) {
        dispatch({
            type: ERROR,
        });
    }
};