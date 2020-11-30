import { createStore, combineReducers, compose, applyMiddleware } from "redux";
import {authReducer} from './reducer/authModule';
import {menu_reducer} from './reducer/confModule';
import thunk from "redux-thunk";

const rootReducer = combineReducers({
  auth: authReducer,
  menu:menu_reducer
  });


const composeEnhancers = window.__REDUX_DEVTOOLS_EXTENSION_COMPOSE__ || compose;

export default function generateStore() {
  const store = createStore(
    rootReducer,
    composeEnhancers(applyMiddleware(thunk))
  );
  return store;
}