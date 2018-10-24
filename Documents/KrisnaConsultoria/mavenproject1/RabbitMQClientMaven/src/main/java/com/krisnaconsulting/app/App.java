package com.krisnaconsulting.app;

/**
 * Hello world!
 *
 */
public class App 
{
    private final static String QUEUE_NAME = "hello";
    
    public static void main( String[] args )
    {

        for (int i = 0; i < 100; i++){
          Receive s;
            s = new Receive(i);
            s.run();
        }
        
    }
}
