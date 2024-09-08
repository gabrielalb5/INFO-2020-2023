#include  <stdio.h>
int main()
{
	float tv, c, sbr, sba;
	sba= 1200;
	printf ("Informe o total vendido:\n");
	scanf ("%f", &tv);
	c= 0.1*tv;
	sbr= sba+c;
	printf ("Comissao =%f\n", sbr);
	system ("PAUSE");
	return 0;
	
}
