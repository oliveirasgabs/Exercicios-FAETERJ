/*Desenvolver uma função que, dado um arquivo texto, verifique o número de caracteres no mesmo.*/

#include <stdio.h>

int verificaCaracter (char nomeArquivo[]){
  FILE *arquivo;
  int n = 0;
  char caracter;
  arquivo = fopen (nomeArquivo , "r");

  if (arquivo == NULL /*if (!arquivo)*/){
    // printf ("Erro na abertura do arquivo!");
    // ou pode usar o return -1 para um switch case na main
    return -1;
  }
  else {
    while (fscanf (arquivo, "%c", &caracter) != EOF){ //enquanto não chegar ao fim do arquivo
     n++; 
    }
    fclose (arquivo);
  }
  return n;
}

int main(void) {
  char nomeArq[30];
  int quantidade; 

  printf("Digite o nome do arquivo:\n");
  fflush(stdin); //limpando o buffer do teclado
  gets(nomeArq); //scanf(" %[^\n], nomeArq);

  quantidade = verificaCaracter(nomeArq);

  switch (quantidade){
    case -1: printf("Erro na abertura do arquivo");
      break;
    case 0: printf("O arquivo está vazio.");
      break;
    default: printf("O arquivo %s contém %i caracteres", nomeArq, quantidade);
  }
  
  return 0;
}