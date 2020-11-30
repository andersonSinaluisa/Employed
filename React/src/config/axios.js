import axios from "axios";

export const clienteAxios = axios.create({
  baseURL: 'http://192.168.1.194:8081/ApiCompany/',
});

export const URLAPI = 'http://192.168.1.194:8081/ApiCompany/';