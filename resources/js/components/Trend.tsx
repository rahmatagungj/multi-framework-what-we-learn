import React from "react";

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
        console.log(data);

        setIsLoading(false);
    };

    React.useEffect(() => {
        getAllTrend();
    }, []);

    return (
        <div>
            <div className="trend py-3">
                <div>
                    <div>
                        <h3>Trending Now</h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing
                            elit, sed do eiusmod tempor
                            <br />
                            incididunt ut labore et dolore magna aliqua.
                        </p>
                    </div>

                    <div className="row mt-4">
                        {isLoading && (
                            <div
                                className="spinner-border d-flex flex-row m-auto my-3"
                                role="status"
                            >
                                <span className="visually-hidden">
                                    Loading...
                                </span>
                            </div>
                        )}
                        {!isLoading &&
                            trends.map((trend, idx) => (
                                <div
                                    className="col-md-4 col-sm-12 col-12"
                                    key={idx}
                                >
                                    <div className="rounded p-3 border border-1">
                                        <div>
                                            <h4 className="text-black text-opacity-75">
                                                {trend.name}
                                            </h4>
                                            <p className="text-black text-opacity-50">
                                                {trend.description}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            ))}
                    </div>
                </div>
            </div>
        </div>
    );
};

export default Trend;
