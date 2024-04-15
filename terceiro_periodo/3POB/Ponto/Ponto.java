package teste;

public class Ponto {
    private double x;
    private double y;

    public void setX (double primeiroNum){
        this.x = primeiroNum;
    }

    public double getX (){
        return x;
    }

    public void setY (double segundoNum){
        this.y = segundoNum;
    }

    public double getY (){
        return y;
    }

    public double distanciaAte (double outroX, double outroY){
        double distancia = Math.sqrt(Math.pow(outroX - x, 2) + Math.pow(outroY - y, 2));
        return distancia;
    }

    public static void main(String[] args) {
        Ponto p1 = new Ponto();
        p1.setX(2);
        p1.setY(2);

        System.out.println( p1.distanciaAte(4, 4));

    }


}
