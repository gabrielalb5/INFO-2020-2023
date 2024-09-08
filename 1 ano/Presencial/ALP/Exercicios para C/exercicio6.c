#include <stdio.h>
int main ()
{
	float bt, br, h, a;
	printf ("Digite a base do triangulo\n");
	scanf ("%f", &bt);
	printf ("Digite a base do retangulo\n");
	scanf ("%f", &br);
	printf ("Digite a altura\n");
	scanf ("%f", &h);
	a= br*h+bt*h/2;
	
	printf ("A area e = %f\n", a);
	system ("PAUSE");
	return 0;
}

