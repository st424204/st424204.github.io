#include <gmp.h>
#include <stdio.h>
#include <string.h>
void swap(char* a,char* b){
	char c=*a;
	*a=*b;
	*b=c;
}
void reverse(char* s){
	int n=strlen(s),m=n>>1;
	for(int i=0;i<m;i++) swap(s+i,s+n-1-i);
}
int main(){
	mpz_t result;
	mpz_init(result);
	mpz_set_ui(result,1);
	for(int i=1;i<=100;i++)
		mpz_mul_ui(result,result,i);
	gmp_printf("%Zd\n",result);
	char data[1000];	
	gmp_sprintf(data,"%Zd\n",result);
	reverse(data);
	printf("%s\n",data);
	
	for(int i=0;;i++){
		printf("%c %c\n",data[i],data[i+1]);
		if(data[i]!='0') break;
	}
	mpz_clear(result);
}

