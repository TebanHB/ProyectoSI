/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package ADT_Lista;

/**
 *
 * @author Ronaldo Rivero
 */
public class NodoD {
    private int dato;
    private NodoD siguiente;
    private NodoD anterior;

    public NodoD() {
        this.dato = -1;
        siguiente = null;
        anterior = null;
    }

    public NodoD(int dato) {
        this.dato = dato;
        siguiente = null;
        anterior = null;
    }

    public NodoD(NodoD nodo) {
        dato = nodo.getDato();
        siguiente = nodo.getSiguiente();
        anterior = nodo.getAnterior();
    }
    
    public int getDato() {
        return dato;
    }

    public void setDato(int dato) {
        this.dato = dato;
    }

    public NodoD getSiguiente() {
        return siguiente;
    }

    public void setSiguiente(NodoD siguiente) {
        this.siguiente = siguiente;
    }

    public NodoD getAnterior() {
        return anterior;
    }

    public void setAnterior(NodoD anterior) {
        this.anterior = anterior;
    }
}
