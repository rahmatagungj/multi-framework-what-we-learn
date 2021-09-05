import React from "react";
import LoadingSpinner from "./LoadingSpinner";

interface ITrends {
    name: string;
    url: string;
    description: string;
}

const Trend = () => {
    const [isLoading, setIsLoading] = React.useState(true);
    const [trends, setTrends] = React.useState<ITrends[]>([]);

    const getAllTrend = async () => {
        const response = await fetch("/api/trend");
        const data = await response.json();
        setTrends(data);
        setIsLoading(false);
    };

    React.useEffect(() => {
        getAllTrend();
    }, []);

    return (
        <div>
            <div className="trend py-3">
                <div>
                    <section className="text-gray-600 body-font">
                        <div className="container px-3 mx-auto">
                            <div className="flex flex-col text-center w-full mb-20">
                                <h1 className="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">
                                    Trending Now
                                </h1>
                                <p className="lg:w-2/3 mx-auto leading-relaxed text-base">
                                    Lorem ipsum dolor sit amet, consectetur
                                    adipiscing elit, sed do eiusmod tempor
                                    <br />
                                    incididunt ut labore et dolore magna aliqua.
                                </p>
                            </div>
                            <div className="flex flex-wrap -m-2">
                                {isLoading && (
                                    <div className="flex flex-col m-auto py-3">
                                        <span className="sr-only">
                                            Loading...
                                        </span>
                                        <LoadingSpinner />
                                    </div>
                                )}
                                {!isLoading &&
                                    trends.map((trend, idx) => (
                                        <div
                                            className="p-2 lg:w-1/3 md:w-1/2 w-full"
                                            key={idx}
                                        >
                                            <div className="h-full flex items-center border-gray-200 border p-4 rounded-lg">
                                                <div className="flex-grow">
                                                    <h2 className="text-gray-900 title-font font-medium">
                                                        {trend.name}
                                                    </h2>
                                                    <p className="text-gray-500">
                                                        {trend.description}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    ))}
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    );
};

export default Trend;
