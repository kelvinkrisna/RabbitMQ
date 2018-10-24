package com.krisnaconsulting.app;


/**
 * Hello world!
 *
 */
public class App 
{
    public static void main( String[] args ) throws java.io.IOException 
    {
        for (int i = 0; i < 100; i++){
          Send s;
            s = new Send(i);
            new Thread(s).start();
        }
        
    }
}

