import { Head } from '@inertiajs/react';

type Product = {
    id: number;
    name: string;
    price: number;
    category: string;
};

type Props = {
    products: Product[];
};

export default function Index({ products }: Props) {
    return (
        <>
            <Head title="Productos" />

            <main className="p-6">
                <h1 className="mb-4 text-2xl font-bold">Productos</h1>

                <div className="grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
                    {products.map((product) => (
                        <article
                            key={product.id}
                            className="rounded-xl border p-4"
                        >
                            <h2 className="text-lg font-semibold">
                                {product.name}
                            </h2>
                            <p>Precio: {product.price}</p>
                            <p>Categoría: {product.category}</p>
                        </article>
                    ))}
                </div>
            </main>
        </>
    );
}