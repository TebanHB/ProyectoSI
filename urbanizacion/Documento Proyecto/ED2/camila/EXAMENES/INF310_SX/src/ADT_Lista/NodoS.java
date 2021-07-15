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
public class NodoS {
    private int dato;
    private NodoS enlace;

    public NodoS() {
        dato = -1;
        enlace = null;
    }

    public NodoS(int dato) {
        this.dato = dato;
        enlace = null;
    }
    
    public NodoS(NodoS nodo) {
        dato = nodo.getDato();
        enlace = nodo.getEnlace();
    }

    public int getDato() {
        return dato;
    }

    public void setDato(int dato) {
        this.dato = dato;
    }

    public NodoS getEnlace() {
        return enlace;
    }

    public void setEnlace(NodoS enlace) {
        this.enlace = enlace;
    }
    
    
}
