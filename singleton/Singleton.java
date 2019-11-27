public class Singleton {
private static uniqueInstance = null ; 

private Singleton(){
System.out.println('Singleton') ; 
} 

public static Singleton getInstance(){
	if(uniqueInstance ===null){
		uniqueInstance = new Singleton();
	}
	
		return uniqueInstance ; 
}

}


