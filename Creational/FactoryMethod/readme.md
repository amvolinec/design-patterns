The Factory Method pattern suggests that you replace direct object construction calls (using the new operator) with
calls to a special factory method. Don’t worry: the objects are still created via the new operator, but it’s being
called from within the factory method. Objects returned by a factory method are often referred to as products.

“The good point over the SimpleFactory is you can subclass it to
implement different ways to create objects.
For simple cases, this abstract class could be just an interface.
This pattern is a “real” Design Pattern because it achieves the
Dependency Inversion principle a.k.a the “D” in SOLID principles.
It means the FactoryMethod class depends on abstractions, not concrete
classes. This is the real trick compared to SimpleFactory or
StaticFactory.”

