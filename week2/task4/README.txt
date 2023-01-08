Type declarations have been specified only for the constructor functions of "comment.php" and "post.php".
The reason for this is that constructors are the only point of entry input data into the code.
This means if the constructors fail due to an incompatible type, this means an early fatal error has saved
    the system from crashing due run time error.