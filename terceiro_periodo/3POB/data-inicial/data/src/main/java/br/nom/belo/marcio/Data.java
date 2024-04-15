package br.nom.belo.marcio;

public class Data 
{
	private int dia;
	private int mes;
	private int ano;

	public Data(int i, int j, int k) 
	{
		this.dia = k;
		this.mes = j;
		this.ano = i;
		int[] meses = { 31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31 };
		if (dia > meses[j - 1]) {
			this.ano = 1900;
			this.mes = 1;
			this.dia = 1;
		}
	}

	public int getDia() 
	{
		return this.dia;
	}

	public int getMes() 
	{
		return this.mes;
	}

	public int getAno() 
	{
		return this.ano;
	}

	public Data adicionarDias(int i) 
	{
		int novoDia = this.dia;
		int novoMes = this.mes;
		int novoAno = this.ano;

		novoDia += i;

		int[] meses = { 31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31 };

		while (novoDia > meses[novoMes - 1]) {
			novoDia -= meses[novoMes - 1];
			novoMes++;

			if (novoMes > 12) {
				novoAno++;
				novoMes = 1;
			}
		}
		return new Data(novoAno, novoMes, novoDia);
	}
}