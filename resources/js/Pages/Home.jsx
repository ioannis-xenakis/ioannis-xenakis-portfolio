import TerminalIcon from "../Assets/Terminal-Icon";

export default function Home({ photo, setting }) {
    return (
        <div className="main-content">
            <div className="photo-imjohn-group">
                <img
                    className="john-photo"
                    src={photo.photo_url}
                    alt="John Xenakis photo"
                />
                <div className="im-john-box">
                    <div className="terminal-icon">
                        <TerminalIcon />
                    </div>
                    <h1 className="home-page-text">
                        I'm <br />
                        <span className="blue-text">
                            {setting.first_english_name}
                        </span>
                    </h1>
                </div>
            </div>
            <div className="job-title">
                <h1 className="home-page-text">
                    I'm an {setting.job_title}
                </h1>
            </div>
        </div>
    );
}
