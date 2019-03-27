#include <stdio.h>

int main(){

        FILE *fp ;

        int index;

        int data;



        fp = fopen("test.txt", "w");

        for(index = 0 ; index < 10 ; index++){

                fprintf(fp, "%d\n", index);

        }



        fclose(fp);



        fp = fopen("test.txt", "r");



        while(fscanf(fp, "%d", &data) != EOF){

                printf("%d\n", data);



        }



        fclose(fp);

        return 0;

}



출처: https://ra2kstar.tistory.com/53 [초보개발자 이야기.]
