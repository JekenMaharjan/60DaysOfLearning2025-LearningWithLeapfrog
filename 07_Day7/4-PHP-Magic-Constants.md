# PHP Magic Constants

## PHP Predefined Constants

- PHP has nine predefined constants that change value depending on where they are used, also called the "magic constants".
- These magic constants are written with a double underscore at the start and the end, except for the ClassName::class constant.

---

## Magic Constants

- Here are the magic constants, with descriptions.

    Constants           |    Description
    --------------------|---------------------------------------------------------------------
    __CLASS__	        |    If used inside a class, the class name is returned.
    __DIR__	            |    The directory of the file.
    __FILE__	        |    The file name including the full path.
    __FUNCTION__	    |    If inside a function, the function name is returned.
    __LINE__	        |    The current line number.
    __METHOD__	        |    If used inside a function that belongs to a class, both class and function name is returned.
    __NAMESPACE__	    |    If used inside a namespace, the name of the namespace is returned.
    __TRAIT__	        |    If used inside a trait, the trait name is returned.
    ClassName::class	|    Returns the name of the specified class and the name of the namespace, if any.

> **Note:** The magic constants are case-insensitive, meaning "__LINE__" returns the same as "__line__".