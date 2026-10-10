import { Head } from "@inertiajs/react";

type Article = {
    id: number;
    title: string;
    content: string;
}

export default function ArticleIndex({ articles }: { articles: Article[] }) {
    return (
        <>
            {/* Título de la pestaña del navegador */}
            <Head title="Artículos" />

            <div className="p-4">
                <h1 className="mb-4 text-2xl font-bold">Artículos</h1>

                {/* Recorremos el array con .map() y pintamos cada artículo */}
                <div className="flex flex-col gap-3">
                    {articles.map((article) => (
                        <div
                            key={article.id}
                            className="rounded-xl border p-4"
                        >
                            <h2 className="text-lg font-semibold">
                                {article.title}
                            </h2>
                            <p className="text-muted-foreground">
                                {article.content}
                            </p>
                        </div>
                    ))}
                </div>
            </div>
        </>
    );
}