import TerminalIcon2 from "../Assets/Terminal-Icon-2";

export default function Projects({ setting, projects }) {
    return (
        <div className="projects-page-content" key="projectsPageContent">
            <div className="projects-page-title">
                <TerminalIcon2 />
                <h2 className="projects-page-title-text">
                    {setting.first_english_name.toLowerCase()}.
                    <span className="blue-text">projects</span>
                </h2>
            </div>
            <div key={"projectsPageGroup"} className="projects-page-group">
                {projects.map((project, i) => (
                    <div key={project.project_name} className="project-item">
                        <img
                            className="project-item-image"
                            src={project.project_image_url}
                            alt="Project image"
                        />
                        <div className="project-item-details">
                            <h3 className="project-item-title">
                                {project.project_name}
                            </h3>
                            <div className="project-item-techs">
                                {project.keywords.map((keyword, index) => {
                                    return (
                                        <div
                                            key={index}
                                            className="project-item-tech"
                                        >
                                            {keyword.name}
                                        </div>
                                    );
                                })}
                            </div>
                            <p className="project-item-description">
                                {project.project_description}
                            </p>
                            <div className="project-item-links">
                                {project.github_url !== "" && (
                                    <a
                                        href={project.github_url}
                                        target="_blank"
                                    >
                                        <img
                                            className="project-item-link-icon"
                                            src={project.github_icon_url}
                                            alt="Github icon"
                                            onError={(e) =>
                                                (e.target.style.display =
                                                    "none")
                                            }
                                        />
                                    </a>
                                )}
                                {project.google_play_url !== "" && (
                                    <a
                                        href={project.google_play_url}
                                        target="_blank"
                                    >
                                        <img
                                            className="project-item-link-icon"
                                            src={project.google_play_icon_url}
                                            alt="Google Play icon"
                                            onError={(e) =>
                                                (e.target.style.display =
                                                    "none")
                                            }
                                        />
                                    </a>
                                )}
                            </div>
                        </div>
                    </div>
                ))}
            </div>
        </div>
    );
}
